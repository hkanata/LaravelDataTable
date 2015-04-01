<?php

class Peoples extends Eloquent {
	
	protected $primaryKey  = 'people_id';
	protected $fillable    = array('name', 'address', 'city_id');
    protected $table       = 'peoples';
	
	public static function getData()
	{
		//return Peoples::find(1);
		//return Peoples::get();
		
		//return Users::leftJoin('peoples', 'peoples.people_id', '=', 'users.people_id')->leftJoin('types_users', 'types_users.type_user_id', '=', 'users.type_user_id')->get()->toArray();
		
		
		
		
		
		
		//OK
		return Peoples::with('users')->get()->toArray();		
		
		//return Peoples::with('users')->leftJoin('types_users', 'types_users.type_user_id', '=', 'users.type_user_id')->firstOrFail();
		//return Peoples::with('users', 'users.types_users')->get()->toArray();		
		//return Peoples::with('users')->get()->toArray();
		
		//esse é usado quando tiver 2 tabelas relacionadas diretamente com peoples.
		//return Peoples::with(array('users', 'types_users'))->get()->toArray();
		
		//return Peoples::with('users')->get();
		
		
		//return DB::table('peoples')->get();
		//return DB::table('peoples')->join('users', 'users.people_id', '=', 'peoples.people_id')->get();
		
    }
	
	public function users() {
        //return $this->belongsToMany('Users', 'types_users', 'type_user_id', 'type_user_id')->withPivot('type_user_id', 'name');
		//return $this->belongsTo('Users');
		
		//ok
		return $this->hasMany('Users', 'people_id', 'people_id');
    }
	
	/*
	public function types_users() {
        return $this->hasMany('TypesUsers', 'type_user_id');
		//return $this->hasMany('Users', 'user_id');
    }
	*/
}