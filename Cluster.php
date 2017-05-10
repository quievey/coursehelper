<?php

namespace System;
// B = max(value,value) + max(value,array) + max(array) + max(remaining)
/**
 * Class Cluster
 * $subjects = [
 *      'id'=>value
 * ]
 */
class Cluster {

    protected $points;
    protected $subjects = [];
    protected $category = [];
    protected $picked = [];

    /**
     * @param integer $category_id
     * @param array $values
     * @return $this
     */
    public function setCategory($category_id,array $values){
        $this->category[$category_id] = $values;

        return $this;
    }

    /**
     * @param integer $category_id
     * @return mixed
     */
    public function getCategory($category_id)
    {
        return $this->category[$category_id];
    }


    public function __construct(array $subjects)
    {
        $this->subjects = $subjects;
    }

    public function maxArray(array $array,$remove = true)
    {
        $max = max($array);
        if ($remove){
            $this->picked[] = array_search($max,$array);
        }

        return $max;
    }

    public function maxArrays(array $array, array $array_2)
    {
        $a = max($array);
        $b = max($array_2);

        $max = max($a,$b);
        $key =  array_search($max,$array);
        if (!$key){
            $key = array_search($max,$array_2);
        }
        $this->picked[] = $key;
        return max($a,$b);
    }


    public function getClusterPoints($type)
    {
        $cluster = 0;
        switch ($type){
            case 'CIT':
                $cluster = $this->takeSubject('math') + $this->takeSubject('physics');
                $cluster += $this->getGroupsMax([2,3]) + $this->getGroupsMax([1],1);
                break;
            case 'Business':
                $cluster = $this->getGroupByKeys(['swahili','english']);
                $cluster += $this->maxArrays($this->getGroupByKeys(['math']),$this->getGroupMax(2));
                $cluster += $this->getGroupsMax([3]) + $this->getGroupsMax([1],1);
                break;
				
            default:
                $cluster =null;
        }
        $this->points = $cluster;
        return $this->points;
    }

    public function getPicked()
    {
        return $this->picked;
    }

    public function getRemaining()
    {
        return array_except($this->subjects,$this->picked);
    }

    public function takeSubject($subject)
    {
        $subjects = $this->getRemaining();
        $sub = $subjects[$subject];
        $this->picked[] = $subject;

        return $sub;
    }

    public function getGroupByKeys(array $keys)
    {
        $subjects = $this->getRemaining();
        $my_subjects = array_only($subjects,$keys);

        if (!is_array($my_subjects)){
            return false;
        }

        return $this->maxArray($my_subjects);
    }


    public function getGroupMax($group)
    {
        $subjects = $this->getRemaining();
        $group_keys = $this->getCategory($group);
        $my_subjects = array_only($subjects,$group_keys);

        if (!is_array($my_subjects)){
            return false;
        }

        return $this->maxArray($my_subjects);
    }

    public function getGroupsMax(array $groups,$reverse = false)
    {
        $subjects = $this->getRemaining();
        $grs = [];
        foreach ($groups as $value){
            $grs[] =  $this->getCategory($value);
        }
        $grs = array_flatten($grs);
        if ($reverse){
            $my_subjects = array_except($subjects,$grs);
        }else{
            $my_subjects = array_only($subjects,$grs);
        }



        return $this->maxArray($my_subjects);
    }

    public function getAggregate()
    {
        return array_sum($this->subjects);
    }

    public function getWeighted($type)
    {
        $c = $this->getClusterPoints($type);
        $a = $this->getAggregate();
        $result = ($c/48) * ($a * 84);
        $result = sqrt($result);
        $result = $result * 48;

        return $result;
    }


}