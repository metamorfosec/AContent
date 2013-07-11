<style>
    li{
        margin:0px 0 4px 1px;
    }
    .items{
        border: 1px dashed #eed;
        width:150px; height:20px;
        margin:2px 0 0 2px;text-decoration:none;
    }
    .items:hover{
        border: 1px dashed #909080;
    }
    .node_icons{
        margin-left:-25px;
    }
    #toolbar{
        width:98%;
        margin:5px;
        padding:3px;
    }
    #toolbar [type="submit"]{
        float:right;
    }
    #toolbar img:hover{
        background:#b2bbd0;
        border: 1px solid #0a246a;
    }
    #toolbar img{
        padding:2px;
        border: 1px solid #f0f0ee;
    }
    #toolbar img[active=false]{
        background:#f0f0ee;
        opacity:0.3;
        border: 1px solid #f0f0ee;
    }
    #toolbar [type="text"]:disabled{
         background:#ebebe4;
         border: 1px solid #abadb3;
    }
    #status{
        background:#FFFDE0;
        margin:auto;
        color:red;
        padding:0px 5px 0px 15px;
    }
</style>
<form action="<?php echo $_SERVER['PHP_SELF'].'?temp='.$this->template; ?>" method="post" name="form" enctype="multipart/form-data">
<div align="center">
    <table class="etabbed-table" border="0" cellpadding="0" cellspacing="0" width="95%">
        <tbody><tr>
                <td class="editor_tab_selected" ><?php echo _AT('edit_template'); ?></td>
                <td class="tab-spacer">&nbsp;</td>
                <td class="editor_tab">
                    <a style="font-weight:bold; text-decoration:none;" href="template_editor/edit_meta.php?type=structure&temp=<?php echo $this->template; ?>">
                        <?php echo _AT('edit_metadata'); ?>
                    </a>
                </td>
                <td class="tab-spacer">&nbsp;</td>
                <td class="editor_tab" >
                    <a style="font-weight:bold; text-decoration:none;" href="template_editor/delete.php?type=structure&temp=<?php echo $this->template; ?>">
                        <?php echo _AT('delete'); ?>
                    </a>
                </td>
                <td>&nbsp;</td>
            </tr>
        </tbody></table>
</div>
    <div class="input-form" style="width: 95%;">
    <div id='toolbar'>
        <div style='float:left; margin:0 10px 1px 10px;'>
            <img class="btn_history" id="btn_undo" src="<?php echo $this->image_path."/undo.png"; ?>" alt="<?php echo _AT('undo'); ?>" title="<?php echo _AT('undo'); ?>">
            <img class="btn_history" id="btn_redo" src="<?php echo $this->image_path."/redo.png"; ?>" alt="<?php echo _AT('redo'); ?>" title="<?php echo _AT('redo'); ?>">
            <img class="btn_insert" id="insert_folder" src="<?php echo $this->image_path."/add_sub_folder.gif"; ?>" alt="<?php echo _AT('add_sub_folder'); ?>" title="<?php echo _AT('add_sub_folder'); ?>">
            <img class="btn_insert" id="insert_page" src="<?php echo $this->image_path."/add_sub_page.gif"; ?>" alt="<?php echo _AT('add_sub_page'); ?>" title="<?php echo _AT('add_sub_page'); ?>">
            <img class="btn_insert" id="insert_page_templates" src="<?php echo $this->image_path."/tree/tree_page_templates.gif"; ?>" alt="<?php echo _AT('add_page_templates'); ?>" title="<?php echo _AT('add_page_templates'); ?>">
            <img class="btn_insert" id="insert_page_template"  src="<?php echo $this->image_path."/tree/tree_page_template.gif"; ?>" alt="<?php echo _AT('add_page_template'); ?>" title="<?php echo _AT('add_page_template'); ?>">
            <img class="btn_insert" id="insert_tests" src="<?php echo $this->image_path."/tree/tree_tests.gif"; ?>" alt="<?php echo _AT('add_tests'); ?>" title="<?php echo _AT('add_tests'); ?>">
            <img class="btn_insert" id="insert_test" src="<?php echo $this->image_path."/tree/tree_test.gif"; ?>" alt="<?php echo _AT('add_test'); ?>" title="<?php echo _AT('add_test'); ?>">
        </div>
        <div style='float:left; margin:-1px 15px 1px 15px;'>
            <label id="lbl_node_name" for="node_name"><?php echo _AT('name'); ?>:</label>
            <input id="node_name" type="text" size="15" maxlength="25" value="" accesskey='n'>
            <label id="lbl_node_min" for="node_min"><?php echo _AT('min'); ?>:</label>
            <input id="node_min" type="text" size="3" maxlength="3" value="" accesskey='o'>
            <label id="lbl_node_max" for="node_min"><?php echo _AT('max'); ?>:</label>
            <input id="node_max" type="text" size="3" maxlength="3" value="" accesskey='p'>
        </div>
        <img class="btn_delete"  accesskey='x' value="Delete" id="btn_delete" src="<?php echo $this->image_path."/x.gif"; ?>" alt="<?php echo _AT('delete'); ?>" title="<?php echo _AT('delete'); ?>">
        <img class="btn_move"  accesskey='u' value="Up" id="btn_up" src="<?php echo $this->image_path."/move_up.png"; ?>" alt="<?php echo _AT('move_up'); ?>" title="<?php echo _AT('move_up'); ?>">
        <img class="btn_move"  accesskey='d' value="Down" id="btn_down" src="<?php echo $this->image_path."/move_down.png"; ?>" alt="<?php echo _AT('move_dowm'); ?>" title="<?php echo _AT('move_dowm'); ?>">

	<input type="submit" name="submit" value="<?php echo _AT('save'); ?>" title="<?php echo _AT('save_changes'); ?>" accesskey="s" />
    </div>
    
    <div id="status"><?php echo _AT('invalid_xml'); ?></div>
    <table border="0" cellpadding="4" style="width:100%">
        <tr>
            <td valign="top" height="100%"> <textarea  id="tarea" name="xml_text" rows="35" cols="60"  style='border:1px solid #cccccc; resize: none;background-color:#ffffff; min-height:400px'> <?php  echo $this->xml_script; ?></textarea></td>
            <td valign="top" height="100%"><div id='preview' style='height:100%; width:400px; min-height:300px; margin:2px;'></div></td>
        </tr>
    </table>
</div>
</form>
