<?php
class wootablepressModel extends modelWtbp {
	public function __construct() {
		$this->_setTbl('tables');
	}

	public function save($data = array()){

        $id = isset($data['id']) ? ($data['id']) : '';
        if(!empty($id)) {

            $data['id'] = (string)$id;
			$data['settings']['order'] = stripslashes($data['settings']['order']);
            $settingData = array('settings' => $data['settings']);
            if(isset($settingData['settings']['custom_css'])) {
                $settingData['settings']['custom_css'] = base64_encode(stripslashes($settingData['settings']['custom_css']));
            }
            $data = dispatcherWtbp::applyFilters('addTableSettings', $data);
            $data['setting_data'] = base64_encode(serialize($settingData));
            $statusUpdate = $this->updateById($data, $id);
            if($statusUpdate){
                return $id;
            }
        } else if(empty($id)){
            $idInsert = $this->insert($data);
            if($idInsert){
                if(empty($data['title'])){
                    $data['title'] = (string)$idInsert;
                }
                $data['id'] = (string)$idInsert;
                if(!isset($data['settings'])) {
                    $data['settings'] = array('header_show' => 1);
                }
                if(!isset($data['settings']['order'])) {
                    $data['settings']['order'] = '';
                }
				$data['settings']['order'] = stripslashes($data['settings']['order']);
                $settingData = array('settings' => $data['settings']);
                $data['setting_data'] = base64_encode(serialize($settingData));
                $this->updateById( $data , $idInsert );
            }
            return $idInsert;
        } else
			$this->pushError (__('Title can\'t be empty or more than 255 characters', WTBP_LANG_CODE), 'title');
        return false;
    }
    public function cloneTable($data = array()){

        $id = isset($data['id']) ? ($data['id']) : '';
        $title = isset($data['title']) ? trim($data['title']) : '';
        if(strlen($title) == 0) {
            $this->pushError (__('Title can\'t be empty or more than 255 characters', WTBP_LANG_CODE), 'title');
        } else if(!empty($id)) {
            $table = $this->getById($id);
            $table['id'] = 0;
            $table['title'] = substr($title, 0, 254);

            $idInsert = $this->insert($table);
            if($idInsert){
                return $idInsert;
            }
        }
        return false;
    }
}
