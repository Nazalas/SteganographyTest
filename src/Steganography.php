<?php

namespace Nazalas\Steganography;

class Steganography {

	static function write($data, $image) {
		return Image::create($image)->write($data);
	}

	static function clear($image) {
		return Image::create($image)->clear();
	}

	static function read($image) {
		return Image::create($image)->read();
	}
}
