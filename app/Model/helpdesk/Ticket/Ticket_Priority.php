<?php namespace App\Model\helpdesk\Ticket;

use Illuminate\Database\Eloquent\Model;

class Ticket_Priority extends Model {
	public $timestamps = false;
	protected $table = 'tkt_ticket_priority';
	protected $fillable = [
		'priority_id', 'priority', 'priority_desc', 'priority_color', 'priority_urgency', 'ispublic',
	];
}