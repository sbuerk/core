<?php
declare(strict_types = 1);

namespace TYPO3\CMS\Core\Resource\Event;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\Folder;

/**
 * This event is fired after a file was copied within a Resource Storage / Driver.
 * The folder represents the "target folder".
 *
 * Example: Listeners can sign up for listing duplicates using this event.
 */
final class AfterFileCopiedEvent
{
    /**
     * @var FileInterface
     */
    private $file;

    /**
     * @var Folder
     */
    private $folder;

    public function __construct(FileInterface $file, Folder $folder)
    {
        $this->file = $file;
        $this->folder = $folder;
    }

    public function getFile(): FileInterface
    {
        return $this->file;
    }

    public function getFolder(): Folder
    {
        return $this->folder;
    }
}
