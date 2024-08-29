import './App.css';
import Firstname from './Components/Firstname/fname';
import Lastname from './Components/Firstname/Lastname/lastname';
import Section from './Components/Firstname/Section/sec';
import Description from './Components/Firstname/Description/desc';





function App() {
  return (
    <div className="App">
      <Firstname/>  
      <Lastname/> 
      <Section/>
      <Description/>
    </div>
  );
}

export default App;
