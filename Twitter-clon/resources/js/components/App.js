import React from 'react';
import ReactDOM from 'react-dom';

// import logo from './logo.svg';
// import './App.css';
import Sidebar from './Sidebar';
import Feed from "./Feed";
import Widgets from "./Widgets";
function App() {
    return (
        //BEM
        <div className="app">
            {/* <p>Hello World</p> */}
            {/* Sidebar */}
            <Sidebar />
            {/* Feed */}
            <Feed />
            {/* Widgets */}
            <Widgets />
        </div>
    );
}

export default App;
if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}