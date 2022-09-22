<?php

/* @Admin/CtMarque/edit.html.twig */
class __TwigTemplate_f3b8fae6f2caa12d37747f6e80a52bf23b2318c324fdd0b4f3701f3639c9605a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMarque/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfe3e3f8df5f96683dd5ac7c3a5b17f1a252e899a1a7929bfaa61855367ce027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe3e3f8df5f96683dd5ac7c3a5b17f1a252e899a1a7929bfaa61855367ce027->enter($__internal_dfe3e3f8df5f96683dd5ac7c3a5b17f1a252e899a1a7929bfaa61855367ce027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/edit.html.twig"));

        $__internal_a9cd208388ba470daf997c43c9e21fcace4d83301d7c126624c9731f606b3578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cd208388ba470daf997c43c9e21fcace4d83301d7c126624c9731f606b3578->enter($__internal_a9cd208388ba470daf997c43c9e21fcace4d83301d7c126624c9731f606b3578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe3e3f8df5f96683dd5ac7c3a5b17f1a252e899a1a7929bfaa61855367ce027->leave($__internal_dfe3e3f8df5f96683dd5ac7c3a5b17f1a252e899a1a7929bfaa61855367ce027_prof);

        
        $__internal_a9cd208388ba470daf997c43c9e21fcace4d83301d7c126624c9731f606b3578->leave($__internal_a9cd208388ba470daf997c43c9e21fcace4d83301d7c126624c9731f606b3578_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e0cbb423757bc56639b2e3936a841dc4c651a44529793a623d696e464abbaf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0cbb423757bc56639b2e3936a841dc4c651a44529793a623d696e464abbaf6->enter($__internal_8e0cbb423757bc56639b2e3936a841dc4c651a44529793a623d696e464abbaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65eed60ef28dfbb9b232852c06932bfc2c68bd80c138532a0cadcbc67448a774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65eed60ef28dfbb9b232852c06932bfc2c68bd80c138532a0cadcbc67448a774->enter($__internal_65eed60ef28dfbb9b232852c06932bfc2c68bd80c138532a0cadcbc67448a774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Marque ";
        
        $__internal_65eed60ef28dfbb9b232852c06932bfc2c68bd80c138532a0cadcbc67448a774->leave($__internal_65eed60ef28dfbb9b232852c06932bfc2c68bd80c138532a0cadcbc67448a774_prof);

        
        $__internal_8e0cbb423757bc56639b2e3936a841dc4c651a44529793a623d696e464abbaf6->leave($__internal_8e0cbb423757bc56639b2e3936a841dc4c651a44529793a623d696e464abbaf6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7877a5e8afc9f0fd393d41b9a3dcf730b1459f74a076b7fc716434a93bbe5395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7877a5e8afc9f0fd393d41b9a3dcf730b1459f74a076b7fc716434a93bbe5395->enter($__internal_7877a5e8afc9f0fd393d41b9a3dcf730b1459f74a076b7fc716434a93bbe5395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98304d18379830dfbae8e91ceea7353f0d893081daf6014fce594b94c8a369d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98304d18379830dfbae8e91ceea7353f0d893081daf6014fce594b94c8a369d8->enter($__internal_98304d18379830dfbae8e91ceea7353f0d893081daf6014fce594b94c8a369d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_98304d18379830dfbae8e91ceea7353f0d893081daf6014fce594b94c8a369d8->leave($__internal_98304d18379830dfbae8e91ceea7353f0d893081daf6014fce594b94c8a369d8_prof);

        
        $__internal_7877a5e8afc9f0fd393d41b9a3dcf730b1459f74a076b7fc716434a93bbe5395->leave($__internal_7877a5e8afc9f0fd393d41b9a3dcf730b1459f74a076b7fc716434a93bbe5395_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMarque/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Marque {% endblock %}

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMarque/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMarque\\edit.html.twig");
    }
}
