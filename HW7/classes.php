<?php

class Book
{
    protected $id;
    protected $name;
    protected $author;
    protected $file_path;
    protected $type;
    protected $sort_order;

    function __construct($id, $name, $author, $file_path, $type, $sort_order)
    {
        $this->id=$id;
        $this->name=$name;
        $this->author=$author;
        $this->file_path=$file_path;
        $this->type=$type;
        $this->sort_order=$sort_order;
    }
}

class BookPdf extends Book
{
    const IMAGE_PREVIEW = '/HW7/images/BookPdf.jpg';

    public function printInfo()
    {
        ?> <p>
            <img src="<?php echo self::IMAGE_PREVIEW ?>" alt="" />
            <a href="<?php echo $this->file_path ?>"><?php echo $this->author .', ' . $this->name . '.'?></a>
        </p> <?php
    }
}

class BookTxt extends Book
{
    const IMAGE_PREVIEW = '/HW7/images/BookTxt.jpg';

    public function printInfo()
    {
        ?> <p>
        <img src="<?php echo self::IMAGE_PREVIEW ?>" alt="" />
        <a href="<?php echo $this->file_path ?>"><?php echo $this->author .', ' . $this->name . '.'?></a>
    </p> <?php
    }
}

class BookDoc extends Book
{
    const IMAGE_PREVIEW = '/HW7/images/BookDoc.jpg';

    public function printInfo()
    {
        ?> <p>
        <img src="<?php echo self::IMAGE_PREVIEW ?>" alt="" />
        <a href="<?php echo $this->file_path ?>"><?php echo $this->author .', ' . $this->name . '.'?></a>
    </p> <?php
    }
}