<?php

class Queue
{

    /**
     * Push a new job onto the queue.
     *
     * @param  string $job
     * @param  mixed  $data
     * @param  string $queue
     *
     * @return mixed
     */
    public static function push($job, $data = '', $queue = null)
    {
        // TODO: Implement push() method.
    }

    /**
     * Push a raw payload onto the queue.
     *
     * @param  string $payload
     * @param  string $queue
     * @param  array  $options
     *
     * @return mixed
     */
    public static function pushRaw($payload, $queue = null, array $options = array())
    {
        // TODO: Implement pushRaw() method.
    }

    /**
     * Push a new job onto the queue after a delay.
     *
     * @param  \DateTime|int $delay
     * @param  string        $job
     * @param  mixed         $data
     * @param  string        $queue
     *
     * @return mixed
     */
    public static function later($delay, $job, $data = '', $queue = null)
    {
        // TODO: Implement later() method.
    }

    /**
     * Pop the next job off of the queue.
     *
     * @param  string $queue
     *
     * @return \Illuminate\Queue\Jobs\Job|null
     */
    public static function pop($queue = null)
    {
        // TODO: Implement pop() method.
    }
}