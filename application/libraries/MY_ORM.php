<?php

class ORM extends ORM_Core
{
	
	/**
	 * Basic validation for checking required fields
	 * @Developer brandon
	 * @Date April 22, 2010
	 */
	protected $validates_presence_of = array();
	
	/**
	 * Validate that fields come in a certain format 
	 * (See http://docs.kohanaphp.com/libraries/validation#rules_specific_to_validation_library)
	 * @Developer brandon
	 * @Date April 22, 2010
	 */
	protected $validates_format_of = array();
	
	
	/**
	 * Do not allow certain fields to be updated via mass-assignment
	 * @Developer brandon
	 * @Date April 22, 2010
	 */
	protected $validates_exclusion_of = array('id');
	
	
	/**
	  * Make sure that the data is unique
	  * @developer Brandon Hansen
	  * @date May 16, 2010
	  */
	protected $validates_uniqueness_of = array();
	
	
	/**
	  * Set the default fields for formo to ignore
	  * @developer Brandon Hansen
	  * @date May 16, 2010
	  */
	public $formo_ignores = array();
	
	
	
	/**
	  * Set up the formo ignore and the model
	  * @Developer brandon
	  * @Date May 18, 2010
	  */
	public function __construct($id = NULL)
	{
		parent::__construct($id);
		$this->formo_ignores = array_merge($this->formo_ignores, array('id', 'store_id', 'created_at', 'updated_at', 'sort_order'));
	}
	
	
	
	/**
	  * Output dates as friendly dates
	  * @developer Brandon Hansen
	  * @date May 16, 2010
	  */
	public function __get($key)
	{
		if(in_array($key, array('created_at', 'modified_at')))
		{
			return date::full_date_time(parent::__get($key));
		}
		else
		{
			return parent::__get($key);
		}
	}
	
	
	/**
	  * Edit path route
	  * @developer Brandon Hansen
	  * @date May 16, 2010
	  */
	public function edit_path()
	{
		return url::site(Kohana::config('routes.base_crud_route') . inflector::plural($this->object_name) . '/edit/' . $this);
	}
	
	
	/**
	  * Show path route
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function show_path()
	{
		return url::site(Kohana::config('routes.base_crud_route') . inflector::plural($this->object_name) . '/show/' . $this);
	}
	
	
	/**
	  * Update path
	  * @developer Brandon Hansen
	  * @date May 16, 2010
	  */
	public function update_path()
	{
		return url::site(Kohana::config('routes.base_crud_route') . inflector::plural($this->object_name) . '/update/' . $this);
	}
	
	
	/**
	  * Create path
	  * @developer Brandon Hansen
	  * @date May 16, 2010
	  */
	public function create_path()
	{
		return url::site(Kohana::config('routes.base_crud_route') . inflector::plural($this->object_name) . '/create/');
	}
	
	
	/**
	  * Destroy Path
	  * @Developer brandon
	  * @Date May 17, 2010
	  */
	public function destroy_path()
	{
		return url::site(Kohana::config('routes.base_crud_route') . inflector::plural($this->object_name) . '/delete/');
	}
	
	
	/**
	  * Find all with no limit
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function find_all_no_limit()
	{
		if(array_key_exists('store_id', $this->table_columns))
		{
			$this->where('store_id', Kohana::config('store.id'));
		}
		
		return parent::find_all();
	}
	
	
	/**
	  * Find only the max per page by default
	  * @Developer brandon
	  * @Date Apr 20, 2010
	  */
	public function find_all($page = NULL)
	{
		if(array_key_exists('store_id', $this->table_columns))
		{
			$this->where('store_id', Kohana::config('store.id'));
		}
		
		return parent::find_all(Kohana::config('pagination.default.items_per_page'), math::page($page));
	}
	
	
	/**
	  * Find an object
	  * @Developer brandon
	  * @Date Oct 18, 2010
	  */
	public function find($id = NULL)
	{
		if(array_key_exists('store_id', $this->table_columns))
		{
			$this->where('store_id', Kohana::config('store.id'));
		}
		
		return parent::find($id);
	}
	
	
	/**
	  * Find recent
	  * @developer Brandon Hansen
	  * @date Oct 15, 2010
	  */
	public function find_recent()
	{
		return $this->orderby('created_at', 'DESC')->find_all();
	}
	
	
	/**
	  * Save the store id
	  * @developer Brandon Hansen
	  * @date Oct 18, 2010
	  */
	public function save()
	{
		// Set the store id
		if(array_key_exists('store_id', $this->table_columns))
		{
			$this->store_id = Kohana::config('store.id');
		}
		
		// Set the created at on new entries
		if(array_key_exists('created_at', $this->table_columns) && !$this->loaded)
		{
			$this->created_at = date('Y-m-d H:i:s');
		}
		
		// Update the "updated_at" column
		if(array_key_exists('updated_at', $this->table_columns))
		{
			$this->updated_at = date('Y-m-d H:i:s');
		}
		
		parent::save();
	}
	
	
	/**
	  * Delete method overload.  Make sure that users can't delete products not in their store
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function delete($id = NULL)
	{
		if(array_key_exists('store_id', $this->table_columns))
		{
			$this->where('store_id', Kohana::config('store.id'));
		}
		
		parent::delete($id);
	}
	
	
	/**
	  * Delete method overload.  Make sure that users can't delete products not in their store
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function delete_all($ids = NULL)
	{
		if(array_key_exists('store_id', $this->table_columns))
		{
			$this->where('store_id', Kohana::config('store.id'));
		}
		
		parent::delete_all($ids);
	}
	
	
	/**
	  * Create a new instance of the object
	  * @Developer brandon
	  * @Date Apr 20, 2010
	  * @Param (array) $params
	  */
	public function create($params)
	{
		if(!$this->validation($params))
		{
			return false;
		}
		
		return $this->mass_assignment($params);
	}
	
	
	/**
	  * Update the object
	  * @Developer brandon
	  * @Date Apr 20, 2010
	  * @Param (array) $params
	  */
	public function update($params)
	{
		if(!$this->loaded)
		{
			throw new Kohana_Exception('orm.record_not_loaded');
			die();	
		}
		
		if(!$this->validation($params))
		{
			return false;
		}
		
		return $this->mass_assignment($params);
	}
	
	
	/**
	  * Clear Related columns/properties because KO caches them without question
	  * @Developer brandon
	  * @Date Apr 27, 2010
	  */
	public function clear_related($column = NULL)
	{
		
		if($column)
		{
			unset($this->related[$column]);
		}
		else
		{
			$this->related = array();
		}
		
	}
	
	
	
	/**
	  * Mass assignment.  
	  * Make sure that we do not save fields that should be excluded.
	  * @Developer brandon
	  * @Date Apr 20, 2010
	  * @Param (array) $params
	  */
	protected function mass_assignment($params)
	{
		foreach($this->table_columns as $column => $value)
		{
			if(array_key_exists($column, $params) && !in_array($column, $this->validates_exclusion_of))
			{
				$this->$column = $params[$column];
			}
		}
		
		// Save, so that we have an ID, and can do has-and-belongs-to-many associations
		$this->save();
		
		
		// Create any child rows
		foreach($this->has_many as $child)
		{
			// Set the child to singular
			$child = inflector::singular($child);
			
			if(array_key_exists($child, $params))
			{
				foreach($params[$child] as $child_row)
				{
					// Either create a new record, or update
					if(array_key_exists('id', $child_row) && $child_row['id'])
					{
						ORM::factory($child, $child_row['id'])->update($child_row);
					}
					else
					{
						ORM::factory($child)->create($child_row);
					}
					
				}
			}
		}
		
		
		// Loop over the habltm
		foreach($this->has_and_belongs_to_many as $relationship)
		{
			if(array_key_exists($relationship, $params))
			{
				if(is_array($params[$relationship]))
				{
					$this->$relationship = array_values($params[$relationship]);
				}
				else
				{
					if($params[$relationship] == 'NULL')
					{
						$this->$relationship = array();
					}
				}
			}
			else
			{
				$this->$relationship = array();
			}
		}
		
		// Save the many-to-many
		return $this->save();
	}
	
	
	/**
	  * Validation for models
	  * @Developer brandon
	  * @Date Apr 21, 2010
	  */
	protected function validation($params)
	{
		$validation = new Validation($params);
		
		// Validate required fields
		foreach($this->validates_presence_of as $required_field)
		{
			$validation->add_rules($required_field, 'required');
		}
		
		// Validate the formatting of the fields
		foreach($this->validates_format_of as $format => $value)
		{
			foreach($value as $field)
			{
				$validation->add_rules($field, $format);	
			}
		}
		
		// Validate the uniqueness of a field
		foreach($this->validates_uniqueness_of as $field)
		{
			$validation->add_callbacks($field, array($this, '_validate_unique'));
		}
		
		return $validation->validate();
	}
	
	
	
	/**
	  * Make sure that the field is unique
	  * @developer Brandon Hansen
	  * @date May 16, 2010
	  */
	public function _validate_unique(Validation $array, $field)
	{
	   // check the database for existing records
	   $field_exists = (bool) ORM::factory($this->object_name)->where($field, $array[$field])->count_all();
	 
	   if ($field_exists)
	   {
	       // add error to validation object
	       $array->add_error($field, $field . '_exists');
	   }
	}
	
}