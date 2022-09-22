<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a89ae0979ddac1d83f3ef8c9b9d2ca88b60b60f7704db4e717ecc0e5e593775b extends Twig_Template
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
        $__internal_2c7951556094b634805876d33a34fbb80b82d45c396c38c3b5ee6e4c0b10149f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7951556094b634805876d33a34fbb80b82d45c396c38c3b5ee6e4c0b10149f->enter($__internal_2c7951556094b634805876d33a34fbb80b82d45c396c38c3b5ee6e4c0b10149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_56b0dc94e873fe749979a7492d8c5959d46ff4e02b5ec1a5332e53e0489a516e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b0dc94e873fe749979a7492d8c5959d46ff4e02b5ec1a5332e53e0489a516e->enter($__internal_56b0dc94e873fe749979a7492d8c5959d46ff4e02b5ec1a5332e53e0489a516e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2c7951556094b634805876d33a34fbb80b82d45c396c38c3b5ee6e4c0b10149f->leave($__internal_2c7951556094b634805876d33a34fbb80b82d45c396c38c3b5ee6e4c0b10149f_prof);

        
        $__internal_56b0dc94e873fe749979a7492d8c5959d46ff4e02b5ec1a5332e53e0489a516e->leave($__internal_56b0dc94e873fe749979a7492d8c5959d46ff4e02b5ec1a5332e53e0489a516e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
