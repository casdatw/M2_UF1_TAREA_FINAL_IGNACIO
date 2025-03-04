import HeaderComponent from './components/HeaderComponent'
import './App.css'
import SectionComponent from './components/SectionComponent'
import FooterComponent from './components/FooterComponent'
import HeadComponent from './components/HeadComponent'
import NavComponent from './components/NavComponent'
import React from 'react'

function App() {
  return (
    <>    
      <HeadComponent></HeadComponent>
      <HeaderComponent></HeaderComponent>
      <NavComponent/>
      <SectionComponent/>
      <FooterComponent/>      
    </>
    
  )
}

export default App
