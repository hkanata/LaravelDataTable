<?php

class Users extends Eloquent {

	protected $primaryKey = 'user_id';
	protected $fillable    = array('people_id', 'type_user_id', 'email', 'password');
    protected $table       = 'users';
	

	
	public function peoples() {
        //return $this->hasOne('Peoples', 'people_id');
		return $this->belongsToMany('Peoples');
    }
	
	public function types_users() {
		return $this->belongsToMany('TypesUsers');
		//return $this->belongsToMany('TypesUsers', 'users', 'type_user_id', 'type_user_id');
		//return $this->hasOne('TypesUsers', 'type_user_id');
		
    }
	
	
	
	
}