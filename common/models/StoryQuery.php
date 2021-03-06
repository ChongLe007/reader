<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[StoryActor]].
 *
 * @see StoryActor
 */
class StoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return StoryActor[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return StoryActor|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
