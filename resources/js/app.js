import './bootstrap';

import React from 'react';
import ReactDOM from 'react-dom';
import ExampleComponent from './components/ExampleComponent'; // Import your React component

if (document.getElementById('example-component')) {
    ReactDOM.render(<ExampleComponent />, document.getElementById('app'));
}