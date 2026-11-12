<?php

namespace App\Models;
use Framework\Model;

class Task extends Model {

private string $name;
private string $priority;
private string $done;

/**
 * Get the value of name
 *
 * @return string
 */
public function getName(): string
{
return $this->name;
}

/**
 * Set the value of name
 *
 * @param string $name
 *
 * @return self
 */
public function setName(string $name): self
{
$this->name = $name;

return $this;
}


/**
 * Get the value of done
 *
 * @return string
 */
public function getDone(): string
{
return $this->done;
}

/**
 * Set the value of done
 *
 * @param string $done
 *
 * @return self
 */
public function setDone(string $done): self
{
$this->done = $done;

return $this;
}

/**
 * Get the value of priority
 *
 * @return string
 */
public function getPriority(): string
{
return $this->priority;
}

/**
 * Set the value of priority
 *
 * @param string $priority
 *
 * @return self
 */
public function setPriority(string $priority): self
{
$this->priority = $priority;

return $this;
}
}