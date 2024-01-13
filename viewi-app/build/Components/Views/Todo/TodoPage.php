<?php


function RenderTodoPage(
    Viewi\Engine $_engine,
    Components\Views\Todo\TodoPage $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= $_engine->renderComponent('Layout', [
        'title' => $_component->title
    ], ['component' => $_component, 'parent' => $_slots, 'map' => [
        'default' => 'RenderTodoPage_Layout_default'
    ]], $_scope);
    $_content .= '
  ';
    return $_content;
}


function RenderTodoPage_Layout_default(
    Viewi\Engine $_engine,
    Components\Views\Todo\TodoPage $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= '
    <h1>';
    $_content .= htmlentities($_component->title ?? '');
    $_content .= '</h1>
  
    <div>

        <h2>';
    $_content .= htmlentities($_component->data->title ?? '');
    $_content .= '</h2>

    </div>
';
    return $_content;
}
