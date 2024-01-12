import { BaseComponent } from "../../../viewi/core/component/baseComponent";
import { register } from "../../../viewi/core/di/register";
import { Layout } from "./Layout";

var HttpClient = register.HttpClient;

class HomePage extends BaseComponent {
    _name = 'HomePage';
    title = "Viewi - Reactive application for PHP";
    data = [];
    http = null;

    constructor(http) {
        super();
        var $this = this;
        $this.http = http;
    }

    init() {
        var $this = this;
        $this.http.get("https:\/\/jsonplaceholder.typicode.com\/todos").then(function (response) {
            $this.data = response;
        }, function () {
        }, function () {
        });
    }
}

export const HomePage_x = [
    function (_component) { return _component.title; },
    function (_component) { return _component.title; },
    function (_component) { return _component.data; },
    function (_component, _key1, item) { return item.title; }
];

export { HomePage }