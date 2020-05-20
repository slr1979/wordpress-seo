<?php

namespace Yoast\WP\SEO\Tests\Doubles\Generators\Schema;

use Yoast\WP\SEO\Context\Meta_Tags_Context as Meta_Tags_Context_Original;

class Author_Mock extends \Yoast\WP\SEO\Generators\Schema\Author {

	/**
	 * @inheritDoc
	 */
	public function build_person_data( $user_id ) {
		return parent::build_person_data( $user_id );
	}
}