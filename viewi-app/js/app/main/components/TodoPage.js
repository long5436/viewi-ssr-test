import { BaseComponent } from "../../../viewi/core/component/baseComponent";
import { register } from "../../../viewi/core/di/register";
import { Layout } from "./Layout";

var HttpClient = register.HttpClient;

class TodoPage extends BaseComponent {
    _name = 'TodoPage';
    title = "Viewi - Reactive application for PHP";
    data = [];
    http = null;
    id = null;

    constructor(http, id) {
        super();
        var $this = this;
        $this.http = http;
        $this.id = id;
    }

    init() {
        var $this = this;
        $this.http.get("https:\/\/jsonplaceholder.typicode.com\/todos\/" + $this.id).then(function (response) {
            $this.data = response;
        }, function () {
        }, function () {
        });
    }
}

export const TodoPage_x = [
    function (_component) { return _component.title; },
    function (_component) { return _component.title; },
    function (_component) { return _component.data.title; }
];

export { TodoPage }