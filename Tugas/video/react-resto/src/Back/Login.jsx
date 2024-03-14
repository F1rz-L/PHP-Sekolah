import React from 'react'
import { useForm } from 'react-hook-form';
import { link } from '../Axios/link';
import { useNavigate } from 'react-router-dom'

function Login() {
    const {
        register,
        handleSubmit,
        watch,
        reset,
        formState: { errors },
        setValue,
    } = useForm();

    const navigate = useNavigate()

    async function login(data){
        const res = await link.post('/login', data)

        let token = await res.data.token
        console.log(token)
        console.log(res.data)

        sessionStorage.setItem('token', token)
        sessionStorage.setItem('email', res.data.data.email)
        sessionStorage.setItem('level', res.data.data.level)

        if (getToken() != 'undefined') {
            navigate('/admin')
            window.location.reload()
        }

        reset()
    }

    const getToken = () =>(sessionStorage.getItem('token'))

    return (
        <>
            <div className="row mt-6">
                <h1 className='text-center mt-6'>Login</h1>
            </div>
            <div className="row">
                <div className="mx-auto col-4">
                    <form onSubmit={handleSubmit(login)}>
                        <div>
                            <div className="mb-3">
                                <label htmlFor="email" className="form-label">Email address</label>
                                <input type="email" {...register("email", { required: true })} className="form-control" name='email' aria-describedby="emailHelp" />
                                {errors.password && (<p className="text-danger">This field is required.</p>)}
                                <div id="emailHelp" className="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div className="mb-3">
                                <label htmlFor="password" className="form-label">Password</label>
                                <input type="password" {...register("password", { required: true })} className="form-control" name='password' />
                                {errors.password && (<p className="text-danger">This field is required.</p>)}
                            </div>
                            <button type="submit" className="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </>
    )
}

export default Login