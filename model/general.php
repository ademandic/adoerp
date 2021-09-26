<?php
/**
 * Author: Adem Andiç
 * General Setting Class Extending Model
 */
class General extends Model
{
    public function getSettings()
    {
        return $this->db->query("SELECT * FROM general_settings WHERE status=2 ORDER BY Id DESC LIMIT 1")
        ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMenubar()
    {
        $menuraw = $this->db->query("SELECT * FROM menubar WHERE status=2 ORDER BY queue ASC")
        ->fetchAll(PDO::FETCH_ASSOC);

        $menubar = array();
        $x = 0;

        foreach ($menuraw as $key => $value)
        {
            $menubar[$x] = $value;

            foreach ($menuraw as $key2 => $value2)
            {
                if($value['menuid']==$value2['parentid'])
                {
                    $menubar[$x]['childs'][] = $value2;
                    continue 1;
                }
            }

            if($menubar[$x]['parentid']!=0)
                unset($menubar[$x]);

            $x++;
        }

        return $menubar;
    }
}

?>