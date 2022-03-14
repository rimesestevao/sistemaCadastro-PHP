import React from 'react'

const Input = ({teste}) => {
  const [num,setNum]=useState(10)
  return (
    <div className='input__container'>
        <p>{num}</p>
        <button>soma</button>
    </div>
  )
}

export default Input