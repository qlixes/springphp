<?php
/*
 * Copyright 2007 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
/**
 * Theme
 *
 * @package		Redstart
 * @subpackage  Theme
 * @author		Ryan Scheuermann
 * @link		http://www.concept64.com/
 * @link		http://www.springframework.org/
 * @since		Version 1.0
 * @filesource
 */
class Theme {

	var $name = null;
	var $directory = null;

	function Theme($name, $directory) {
		$this->name = $name;
		$this->directory = $directory;
	}

	function getName() {
		return $this->name;
	}

	function getDirectory() {
		return $this->directory;
	}

	function resolveFilename($filename) {
		return $this->directory .$filename;
	}

	function fileExists($filename) {
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		$filename = ($ext == '') ? $filename.EXT : $filename;
		return file_exists($this->directory.$filename);
	}


}


?>