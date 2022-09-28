<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5e79fe9893c12649dfe9150a92cee32f278c874e8dd687f99aab05f4346940b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_789f392fa7986cc79598e6dd51a66a0e2c7bfe5973ddecb8c10bd118a3bd8492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789f392fa7986cc79598e6dd51a66a0e2c7bfe5973ddecb8c10bd118a3bd8492->enter($__internal_789f392fa7986cc79598e6dd51a66a0e2c7bfe5973ddecb8c10bd118a3bd8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_efd3272d9fa0258b1439a91e6273c836f575286c3024f277b6e6dd5d07e1e9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd3272d9fa0258b1439a91e6273c836f575286c3024f277b6e6dd5d07e1e9f0->enter($__internal_efd3272d9fa0258b1439a91e6273c836f575286c3024f277b6e6dd5d07e1e9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_789f392fa7986cc79598e6dd51a66a0e2c7bfe5973ddecb8c10bd118a3bd8492->leave($__internal_789f392fa7986cc79598e6dd51a66a0e2c7bfe5973ddecb8c10bd118a3bd8492_prof);

        
        $__internal_efd3272d9fa0258b1439a91e6273c836f575286c3024f277b6e6dd5d07e1e9f0->leave($__internal_efd3272d9fa0258b1439a91e6273c836f575286c3024f277b6e6dd5d07e1e9f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
