<?php 
function my_post_types(){
    register_post_type('event', array(
        'supports'=>array(
            'title','editor','excerpt'
        ),
        'rewrite'=>array(
            'slug'=>'events'
        ),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Events',
            'add_new_item'=>'Add New Event',
            'edit_item'=>'Edit Event',
            'all_items'=>'All Events',
            'singlular_name'=>'Event'
        ),
        'menu_icon'=>'dashicons-calendar'
    ));
      //Programs Post Types
      register_post_type('program', array(
        'supports'=>array(
            'title','editor'
        ),
        'rewrite'=>array(
            'slug'=>'programs'
        ),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>'Programs',
            'add_new_item'=>'Add New Program',
            'edit_item'=>'Edit Program',
            'all_items'=>'All Programs',
            'singlular_name'=>'Program'
        ),
        'menu_icon'=>'dashicons-awards'
    ));
}
add_action('init','my_post_types');


/*ဒီ ဖိုင် က theme folder ရဲ့ အပြင်မှာ mu-plugins ဆိုပြီးတော့ 
ဖိုဒါတစ်ခုထက်ဆောက်ပြီးထည့်ရမဲ့ ဖိုင် ကြိုက်တဲ့နံမည်ပေးလို့ရတယ်။

