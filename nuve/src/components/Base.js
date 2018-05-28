import React, { Component } from 'react'
import Results from './Results'
import Search from './Search'

class Base extends Component{
  render(){
    return(
      <div>
        <Search />
        <Results />
      </div>
    )
  }
}
export default Base
