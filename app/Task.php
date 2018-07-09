<?php

        namespace App;

        use Illuminate\Database\Eloquent\Model;

        class Task extends Model {

            //
            protected $fillable = [
                    'name', 'description', 'days', 'hours', 'user_id', 'company_id', 'project_id',
            ];

            public function user() {
                return $this->belongsTo('App\User');
            }

            public function company() {
                return $this->belongsTo('App\Company');
            }

            public function project() {
                return $this->belongsTo('App\Project');
            }

            public function comments() {
                return $this->morphMany('App\Comment', 'commentable');
            }

        }
        