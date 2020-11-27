<?php

namespace Lustmored\Flysystem\Cache;

class FileMetadataCache
{
    private ?int $lastModified = null;
    private ?string $mimeType = null;
    private ?int $fileSize = null;
    private ?string $visibility = null;

    public function getLastModified(): ?int
    {
        return $this->lastModified;
    }

    public function setLastModified(int $lastModified): FileMetadataCache
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): FileMetadataCache
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize): FileMetadataCache
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): FileMetadataCache
    {
        $this->visibility = $visibility;

        return $this;
    }
}
