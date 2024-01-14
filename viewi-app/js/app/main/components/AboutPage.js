import { BaseComponent } from "../../../viewi/core/component/baseComponent";
import { register } from "../../../viewi/core/di/register";
import { Layout } from "./Layout";

var HttpClient = register.HttpClient;

class AboutPage extends BaseComponent {
    _name = 'AboutPage';
    title = "About";
    data = [];
    http = null;

    constructor(http) {
        super();
        var $this = this;
        $this.http = http;
    }

    init() {
        var $this = this;
        $this.http.post("http:\/\/localhost:5000\/api\/movies", {"id": 123}).then(function (data) {
            $this.data = data;
        }, function (error) {
            console.log(error);
        });
    }
}

export const AboutPage_x = [
    function (_component) { return _component.title; },
    function (_component) { return _component.title; },
    function (_component) { return _component.data; },
    function (_component, _key1, item) { return item["name"]; }
];

export { AboutPage }