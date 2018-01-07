<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['id', 'name', 'parent_id'];

    public function menu()
    {
        $menu = self::all();
        return $menu;
    }


    public static function getDropdownMenu($parentsMenu)
    {
        $listMenu = [];
        foreach ($parentsMenu as $parentMenu) {
            $listMenu[$parentMenu['id']] = $parentMenu['name'];

        }
        return $listMenu;
    }

    public function getChilds()
    {
        $childs = self::query()->where('parent_id', $this->id)->get();
        return $childs;
    }

    public static function getMenu()
    {
        $menu = [];
        $parents = self::query()->where('parent_id', 0)->get();
        foreach ($parents as $parent) {
            $childrenArray = [];
            $menu[$parent->id] = [
                'id' => $parent->id,
                'name' => $parent->name,
            ];
            $children = $parent->getChilds();

            if (!empty($children)) {
                foreach ($children as $child) {
                    $childrenNextArray = [];
                    $childrenArray[$child->id] = [
                        'id' => $child->id,
                        'name' => $child->name,
                        'children' => []
                    ];

                    $childrenNext = $child->getChilds();

                    if (!empty($childrenNext)) {
                        foreach ($childrenNext as $next) {
                            $childrenNextArray[$next->id] = [
                                'id' => $next->id,
                                'name' => $next->name,
                                'children' => []
                            ];
                            $childrenArray[$next->parent_id]['children'] = $childrenNextArray;
                        }
                    }
                }

            }
            $menu[$parent->id]['children'] = $childrenArray;

        }

        return $menu;
    }

    public function getParent()
    {
        $parent = self::query()
            ->where('parent_id', $this->id);
        return $parent;
    }

    public static function parents()
    {
        $parent = self::getParent();
        return $parent;
    }
}
