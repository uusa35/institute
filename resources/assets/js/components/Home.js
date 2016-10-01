/**
 * Created by usamaahmed on 8/30/16.
 */
import React , { Component } from 'react';


export default class Home extends Component {

    constructor(props, content) {
        super(props, content);
        this.state = {
            message: ''
        };
    }

    componentDidMount() {
        // Enable pusher logging - don't include this in production
        //Pusher.logToConsole = true;
        //
        //var pusher = new Pusher('51c92b3ae57de17a5e1e', {
        //    encrypted: true,
        //    debug: true
        //});
        //
        //var channel = pusher.subscribe('channelName');
        //
        //console.log('from inside the componentWillMount');
        //
        //channel.bind('eventName', function (data) {
        //    this.setState({message: data.message});
        //},this);
    }

    render() {
        return (
            <div>{this.state.message}</div>
        );
    }

}