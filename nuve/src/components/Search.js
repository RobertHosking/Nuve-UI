import React, { Component } from 'react'

class Search extends Component{
  render(){
    return(
        <div className="container">
          <div className="logo"></div>
          <input type="checkbox" id="search" hidden="hidden" checked />
          <label htmlFor="search">
              <span className="fa fa-search"></span>
          </label>
          <main>
            <section className="search">
              <form action="">
                <input type="search" placeholder="Search..."/>
              </form>
            </section>
          </main>
        </div>
    )
  }
}
export default Search
