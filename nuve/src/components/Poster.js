import React, { Component } from 'react'

class Poster extends Component{
  render(){
    return(
      <div className="grid-item">
          <div className="hovereffect">
              <img className="img-responsive" height="300px" src={this.props.img} alt=""/>
                  <div className="overlay">

                      <p className="icon-links">
                          <a href="/movie-preview.html" className="heart">
                              <span className="fa fa-heart-o"></span>
                          </a>
                      </p>
                  </div>
                  <div className="title">
                      {this.props.title}
                      </div>
                       <div className="sub-text">
                      {this.props.year}
                      </div>

          </div>
      </div>
    )
  }
}
export default Poster
