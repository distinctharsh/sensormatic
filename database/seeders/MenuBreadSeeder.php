<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class MenuBreadSeeder extends Seeder
{
    public function run()
    {
        // Menu DataType
        $dataType = DataType::firstOrNew(['slug' => 'menus']);
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Models\\Menu',
                'policy_name' => null,
                'controller' => null,
                'generate_permissions' => 1,
                'description' => '',
            ])->save();
        }

        // Menu DataRows
        $rows = [
            'id' => [
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
            ],
            'name' => [
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'location' => [
                'type' => 'select_dropdown',
                'display_name' => 'Location',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => [
                    'options' => [
                        'main' => 'Main Navigation',
                        'footer' => 'Footer',
                        'mobile' => 'Mobile Menu',
                    ],
                ],
            ],
            'is_active' => [
                'type' => 'checkbox',
                'display_name' => 'Active',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'created_at' => [
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
            ],
            'updated_at' => [
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
            ],
        ];

        foreach ($rows as $key => $row) {
            $dataRow = DataRow::firstOrNew(['data_type_id' => $dataType->id, 'field' => $key]);
            if (!$dataRow->exists) {
                $dataRow->fill($row)->save();
            }
        }

        // MenuItem DataType
        $dataType = DataType::firstOrNew(['slug' => 'menu-items']);
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'menu_items',
                'display_name_singular' => 'Menu Item',
                'display_name_plural' => 'Menu Items',
                'icon' => 'voyager-list-add',
                'model_name' => 'App\\Models\\MenuItem',
                'policy_name' => null,
                'controller' => null,
                'generate_permissions' => 1,
                'description' => '',
            ])->save();
        }

        // MenuItem DataRows
        $rows = [
            'id' => [
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
            ],
            'menu_id' => [
                'type' => 'number',
                'display_name' => 'Menu ID',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'title' => [
                'type' => 'text',
                'display_name' => 'Title',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'url' => [
                'type' => 'text',
                'display_name' => 'URL',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'target' => [
                'type' => 'select_dropdown',
                'display_name' => 'Target',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => [
                    'options' => [
                        '_self' => 'Same Window',
                        '_blank' => 'New Window',
                    ],
                ],
            ],
            'icon' => [
                'type' => 'text',
                'display_name' => 'Icon',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'parent_id' => [
                'type' => 'number',
                'display_name' => 'Parent ID',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'order' => [
                'type' => 'number',
                'display_name' => 'Order',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'is_active' => [
                'type' => 'checkbox',
                'display_name' => 'Active',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
            ],
            'created_at' => [
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
            ],
            'updated_at' => [
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
            ],
        ];

        foreach ($rows as $key => $row) {
            $dataRow = DataRow::firstOrNew(['data_type_id' => $dataType->id, 'field' => $key]);
            if (!$dataRow->exists) {
                $dataRow->fill($row)->save();
            }
        }
    }
} 