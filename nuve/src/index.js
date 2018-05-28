import React from 'react';
import ReactDOM from 'react-dom';
import './styles/css/style.css';
import bootstrap from 'bootstrap'
import Base from './components/Base';
import registerServiceWorker from './registerServiceWorker';

ReactDOM.render(<Base />, document.getElementById('root'));
registerServiceWorker();
