<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $category_id
 * @property string $category_name
 * @property string $category_slug
 * @property string|null $category_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Lesson[] $lessons
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCategoryDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCategorySlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Lesson
 *
 * @property int $lesson_id
 * @property string $lesson_title
 * @property int $lesson_category_id
 * @property string $lesson_minute
 * @property string $lesson_description
 * @property string $lesson_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $questions
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereLessonCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereLessonDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereLessonMinute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereLessonText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereLessonTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lesson whereUpdatedAt($value)
 */
	class Lesson extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Question
 *
 * @property int $question_id
 * @property int $lesson_id
 * @property string $question
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Lesson $lesson
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Question whereUpdatedAt($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuestionDetails
 *
 * @property int $qd_id
 * @property int $qd_question_id
 * @property string $qd_value
 * @property int $qd_is_correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails whereQdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails whereQdIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails whereQdQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails whereQdValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\QuestionDetails whereUpdatedAt($value)
 */
	class QuestionDetails extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

