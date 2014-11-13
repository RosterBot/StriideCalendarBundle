<?php
namespace Striide\CalendarBundle\Model;

class Event
{
    private $guid = null;

    public function setGuid($guid)
    {
        $this->guid = $guid;
    }

    public function getGuid()
    {
        return $this->guid;
    }

  protected $name = "";
  public function getName()
  {
    return $this->name;
  }
  
  /**
   * @return Event
   */
  public function setName($n)
  {
    $this->name = $n;
    return $this;
  }
  
  protected $description = "";
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @return Event
   */
  public function setDescription($d)
  {
    $this->description = $d;
    return $this;
  }
  /**
   * @return bool
   */
  public function hasDescription()
  {
    if(empty($this->description))
    {
      return false;
    }
    return true;
  }
  
  protected $custom_description;
  public function getCustomDescription()
  {
    return $this->custom_description;
  }
  /**
   * @return Event
   */
  public function setCustomDescription($description,$id)
  {
    $this->setDescription($description);
    $this->custom_description = $id;
    return $this;
  }
  /**
   * @return bool
   */
  public function hasCustomDescription()
  {
    if(empty($this->custom_description))
    {
      return false;
    }
    return true;
  }
  
  protected $url = "";
  public function getUrl()
  {
    return $this->url;
  }
  /**
   * @return Event
   */
  public function setUrl($u)
  {
    $this->url = $u;
    return $this;
  }
  /**
   * @return bool
   */
  public function hasUrl()
  {
    if(empty($this->url))
    {
      return false;
    }
    return true;
  }

  protected $location = "";
  public function getLocation()
  {
    return $this->location;
  }
  
  /**
   * @return Event
   */
  public function setLocation($l)
  {
    $this->location = $l;
    return $this;
  }

  /**
   * @var DateTime
   */
  protected $starttime = null;
  public function getStarttime()
  {
    return $this->starttime;
  }
  
  /**
   * @return Event
   */
  public function setStarttime(\DateTime $s)
  {
    $this->starttime = $s;
    return $this;
  }

  /**
   * @var DateTime
   */
  protected $endtime = null;
  public function getEndtime()
  {
    return $this->endtime;
  }
  
  /**
   * @return Event
   */
  public function setEndtime(\DateTime $s)
  {
    $this->endtime = $s;
    return $this;
  }

  /**
   * @var DateTimeZone
   */
  protected $timezone = null;
  public function getTimezone()
  {
    // in the event we need to return a default
    if(is_null($this->timezone))
    {
      $this->timezone = new \DateTimeZone('US/Pacific');
    }
    return $this->timezone;
  }

  public function getTimezoneAbbreviation()
  {
    return 'PST';
  }

  /**
   * @param string $d 3h 3.5h etc
   * @return Event
   */
  public function setDuration($d)
  {
    $this->duration = $d;
    return $this;
  }

  /**
   * @var array(Alarm)
   * @return Event
   */
  protected $alarms = array();
  public function addAlarm(Alarm $a)
  {
    $this->alarms[] = $a;
    return $this;
  }
  public function getAlarms()
  {
    return $this->alarms;
  }
}
