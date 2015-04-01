<?php

class TypesUsers extends Eloquent {

	protected $primaryKey = 'type_user_id';
	protected $fillable    = array('name');
    protected $table       = 'types_users';
	

	/*
	public function users() {
        return $this->hasOne('Users', 'user_id');
    }*/
}
