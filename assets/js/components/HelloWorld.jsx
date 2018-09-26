import React from 'react'

export default function HelloWorld({name, color, shape}) {
  return (
    <div>
      Hi {name}, your favourite color is {color} and shape is {shape}
    </div>
  )
}
