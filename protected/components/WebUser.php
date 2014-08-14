<?php
class WebUser extends CWebUser {
 
  private $_model; 
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model=Pelanggantbl::model()->findByPk($id);
        }
        return $this->_model;
    }
	
  public function isAdmin()
   {
    $user = $this->loadUser(Yii::app()->user->id);
	if($user)
	{    
		return ($user->id) == 1;
	}
  }
 
  public function isMember()
   {
    $user = $this->loadUser(Yii::app()->user->id);
	if($user)
	{    
		return ($user->id) >= 1;
	}
  }
  
  public function notMember()
  {
	$user = $this->loadUser(Yii::app()->user->id);
	if($user)
	{    
		return ($user->username)==null;
	}
  }
}
?>