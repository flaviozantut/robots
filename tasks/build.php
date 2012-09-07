<?php

/**
 * Robots is a fork from the fuel robots task
 *
 * @package 	robots
 * @author 		flaviozantut
 * @copyright 	Flávio Zantut 2012
 * @license 	MIT License <http://www.opensource.org/licenses/mit>
 */
class Robots_Build_Task extends Task
{
	
	
	/**
	 * run() is the start-point of the CLI request
	 *
	 * @param $arguments array The command and its arguments.
	 * @return void
	 */
	public function run($arguments = array())
	{
		if (isset($arguments[0]) and $arguments[0] == 'protect') {
			echo $this->protect();
		} else {
			echo $this->kill($arguments);
		}
		
	}

	/**
	 * This method gets ran when a valid method name is not used in the command.
	 *
	 * Usage (from command line):
	 *
	 *  php artisan robots::build
	 *
	 * or
	 *
	 * php artisan robots::build "Kill all Mice"
	 *
	 * @return string
	 */
	public function kill($speech)
	{
		if ( !isset($speech[0]))
		{
			$speech = 'KILL ALL HUMANS!';
		} else {
			$speech = implode ( " ", $speech);
		}

		$eye = \Cli::color("*", 'red');
		return \Cli::color("
					\"{$speech}\"
			          _____     /
			         /_____\\", 'blue')."\n"
.\Cli::color("			    ____[\\", 'blue').$eye.\Cli::color('---', 'blue').$eye.\Cli::color('/]____', 'blue')."\n"
.\Cli::color("			   /\\ #\\ \\_____/ /# /\\
			  /  \\# \\_.---._/ #/  \\
			 /   /|\\  |   |  /|\\   \\
			/___/ | | |   | | | \\___\\
			|  |  | | |---| | |  |  |
			|__|  \\_| |_#_| |_/  |__|
			//\\\\  <\\ _//^\\\\_ />  //\\\\
			\\||/  |\\//// \\\\\\\\/|  \\||/
			      |   |   |   |
			      |---|   |---|
			      |---|   |---|
			      |   |   |   |
			      |___|   |___|
			      /   \\   /   \\
			     |_____| |_____|
			     |HHHHH| |HHHHH|", 'blue');
	}

	/**
	 * An example method that is here just to show the various uses of tasks.
	 *
	 * Usage (from command line):
	 *
	 * php artisan robots::build protect
	 *
	 * @return string
	 */
	public function protect()
	{
		$eye = \Cli::color("*", 'green');

		return \Cli::color("
					\"PROTECT ALL HUMANS\"
			          _____     /
			         /_____\\", 'blue')."\n"
.\Cli::color("			    ____[\\", 'blue').$eye.\Cli::color('---', 'blue').$eye.\Cli::color('/]____', 'blue')."\n"
.\Cli::color("			   /\\ #\\ \\_____/ /# /\\
			  /  \\# \\_.---._/ #/  \\
			 /   /|\\  |   |  /|\\   \\
			/___/ | | |   | | | \\___\\
			|  |  | | |---| | |  |  |
			|__|  \\_| |_#_| |_/  |__|
			//\\\\  <\\ _//^\\\\_ />  //\\\\
			\\||/  |\\//// \\\\\\\\/|  \\||/
			      |   |   |   |
			      |---|   |---|
			      |---|   |---|
			      |   |   |   |
			      |___|   |___|
			      /   \\   /   \\
			     |_____| |_____|
			     |HHHHH| |HHHHH|", 'blue');

	}

}

	
