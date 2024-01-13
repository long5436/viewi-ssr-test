<?php


function RenderHomePage(
    Viewi\Engine $_engine,
    Components\Views\Home\HomePage $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= $_engine->renderComponent('Layout', [
        'title' => $_component->title
    ], ['component' => $_component, 'parent' => $_slots, 'map' => [
        'default' => 'RenderHomePage_Layout_default'
    ]], $_scope);
    $_content .= '
';
    return $_content;
}


function RenderHomePage_Layout_default(
    Viewi\Engine $_engine,
    Components\Views\Home\HomePage $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= '
  <h1>';
    $_content .= htmlentities($_component->title ?? '');
    $_content .= '</h1>

  <ul>
    ';
    foreach ($_component->data as $item) {
        $_content .= '<li>
      <a href="/todo/';
        $_content .= htmlentities($item['id'] ?? '');
        $_content .= '">';
        $_content .= htmlentities($item['title'] ?? '');
        $_content .= '</a>
    </li>';
    }
    $_content .= '
  </ul>
';
    return $_content;
}
