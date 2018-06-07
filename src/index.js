import React from 'react';
import ReactDOM from 'react-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import './styles/css/style.css';
import Base from './components/Base';
import registerServiceWorker from './registerServiceWorker';
ReactDOM.render(<Base />, document.getElementById('root'));
registerServiceWorker();
