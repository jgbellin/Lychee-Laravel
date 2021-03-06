<?php

namespace App\Image;

interface ImageHandlerInterface
{
	/**
	 */
	public function __construct(int $compressionQuality);

	/**
	 * @param  string $source
	 * @param  string $destination
	 * @param  int    $newWidth
	 * @param  int    $newHeight
	 * @return bool
	 */
	public function scale(
		string $source,
		string $destination,
		int $newWidth,
		int $newHeight
	) : bool ;

		/**
	 * @param  string $source
	 * @param  string $destination
	 * @param  int    $newWidth
	 * @param  int    $newHeight
	 * @return bool
	 */
	public function crop(
		string $source,
		string $destination,
		int $newWidth,
		int $newHeight
	) : bool ;

	/**
	 * Rotates and flips a photo based on its EXIF orientation.
	 *
	 * @param string $path
	 * @param array  $info
	 * @return array
	 */
	public function autoRotate(string $path, array $info) : array ;
}
