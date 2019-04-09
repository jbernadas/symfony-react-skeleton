/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
import React from 'react';
import ReactDOM from 'react-dom';
import '../css/app.css';

class App extends React.Component {
    render() {
        return(
            <div>
                <h1>Hello, World!</h1>
            </div>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('root'));
