<?php

namespace GeniePress\Fields;

class ImageField extends FileField
{

    /**
     * Specify the maximum height of the image
     *
     * @param  int  $maxHeight
     *
     * @return $this
     */
    public function maxHeight(int $maxHeight): ImageField
    {
        return $this->set('max_height', $maxHeight);
    }



    /**
     * Specify the maximum width of the image
     *
     * @param  int  $maxWidth
     *
     * @return $this
     */
    public function maxWidth(int $maxWidth): ImageField
    {
        return $this->set('max_width', $maxWidth);
    }



    /**
     * Specify the minimum height of the image
     *
     * @param  int  $minHeight
     *
     * @return $this
     */
    public function minHeight(int $minHeight): ImageField
    {
        return $this->set('min_height', $minHeight);
    }



    /**
     * Specify the minimum width of the image
     *
     * @param  int  $minWidth
     *
     * @return $this
     */
    public function minWidth(int $minWidth): ImageField
    {
        return $this->set('min_width', $minWidth);
    }



    /**
     * Set Defaults
     */
    protected function setDefaults(): void
    {
        parent::setDefaults();
        $this->type('image');
    }

}
