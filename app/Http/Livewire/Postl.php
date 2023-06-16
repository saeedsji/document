<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Postl extends Component
{
    public $posts, $title, $text, $postId, $updatePost = false, $addPost = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deletePostListner' => 'deletePost'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',
        'text' => 'required'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->title = '';
        $this->text = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->posts = Post::select('id', 'title', 'text')->get();
        return view('livewire.postl');
    }

    /**
     * Open Add Post form
     * @return void
     */
    public function addPost()
    {
        $this->resetFields();
        $this->addPost = true;
        $this->updatePost = false;
    }

    /**
     * store the user inputted post data in the Post table
     * @return void
     */
    public function storePost()
    {
        $this->validate();
        try {
            Post::create([
                'user_id' => 1,
                'title' => $this->title,
                'text' => $this->text
            ]);
            session()->flash('success', 'Post Created Successfully!!');
            $this->resetFields();
            $this->addPost = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }

    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function editPost($id)
    {
        try {
            $post = Post::findOrFail($id);
            if (!$post) {
                session()->flash('error', 'Post not found');
            }
            else {
                $this->title = $post->title;
                $this->text = $post->text;
                $this->postId = $post->id;
                $this->updatePost = true;
                $this->addPost = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }

    }

    /**
     * update the post data
     * @return void
     */
    public function updatePost()
    {
        $this->validate();
        try {
            Post::whereId($this->postId)->update([
                'title' => $this->title,
                'text' => $this->text
            ]);
            session()->flash('success', 'Post Updated Successfully!!');
            $this->resetFields();
            $this->updatePost = false;
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancelPost()
    {
        $this->addPost = false;
        $this->updatePost = false;
        $this->resetFields();
    }

    /**
     * delete specific post data from the Post table
     * @param mixed $id
     * @return void
     */
    public function deletePost($id)
    {
        try {
            Post::find($id)->delete();
            session()->flash('success', "Post Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong!!");
        }
    }
}
