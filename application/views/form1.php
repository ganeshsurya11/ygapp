<? echo form_open('books/input'); ?>
<? echo $title       .' : '.form_input($ftitle); ?></br>
<? echo $author      .' : '.form_input($fauthor); ?></br>
<? echo $publisher   .' : '.form_input($fpublisher); ?></br>
<? echo $year        .' : '.form_dropdown('year',$years); ?></br>
<? echo $available   .' : '.form_checkbox($favailable); ?></br>
<? echo $summary .' : '.form_textarea($fsummary); ?></br>
<? echo form_submit('mysubmit','Submit!');  ?>
<? echo form_close(); ?>