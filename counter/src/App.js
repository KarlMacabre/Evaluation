import React, { Component } from 'react';
import './App.css';

class App extends Component {
state = {
  value: '',
};

  handleChange = ({ target: { value }}) => {
    this.setState({ value});
};
  render() {
    const { value } = this.state;
    return (
      <div className="App">
      <div className="tweetbox">
      <textarea 
      rows={3}
      placeholder="Eciver un message"
      value={value}
      onChange={this.handleChange}/>
      <span className="count">{140 - value.length}</span>
      </div>
      </div>
    );
  }
}
<div className="tweetbox"><div className="tweetbox">
  <textarea
    rows={3}
    placeholder="Eciver un message"
    value={value}
    onChange={this.handleChange}
  />
  <span className="count">{140 - value.length}</span>
</div>

      <textarea 
      rows={3}
      placeholder="Eciver un message"
      value={value}
      onChange={this.handleChange}/>
      <span className="count">{140 - value.length}</span>
      </div>
export default App;
