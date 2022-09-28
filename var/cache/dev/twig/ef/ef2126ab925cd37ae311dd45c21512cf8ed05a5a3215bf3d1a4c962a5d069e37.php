<?php

/* @Admin/CtSourceEnergie/edit.html.twig */
class __TwigTemplate_62bf73a6e42cf7a281d738a876e4bed708d09461e34efcc93db4ee8ec6b10170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtSourceEnergie/edit.html.twig", 1);
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
        $__internal_92d708572acd3cc987c48253466d8ea948974dade9af07e8209da416e534605a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d708572acd3cc987c48253466d8ea948974dade9af07e8209da416e534605a->enter($__internal_92d708572acd3cc987c48253466d8ea948974dade9af07e8209da416e534605a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/edit.html.twig"));

        $__internal_651f0b051484ee736510d390f9be3ebd09304146b3f52efaab6c3b9ac8c79036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651f0b051484ee736510d390f9be3ebd09304146b3f52efaab6c3b9ac8c79036->enter($__internal_651f0b051484ee736510d390f9be3ebd09304146b3f52efaab6c3b9ac8c79036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_energie"] = true;
        // line 8
        $context["menu_energie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92d708572acd3cc987c48253466d8ea948974dade9af07e8209da416e534605a->leave($__internal_92d708572acd3cc987c48253466d8ea948974dade9af07e8209da416e534605a_prof);

        
        $__internal_651f0b051484ee736510d390f9be3ebd09304146b3f52efaab6c3b9ac8c79036->leave($__internal_651f0b051484ee736510d390f9be3ebd09304146b3f52efaab6c3b9ac8c79036_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaf106e34afa4cb6fdcc566b0b16a7aeef4fd4c0bc96cb6177c63ee212cb67fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf106e34afa4cb6fdcc566b0b16a7aeef4fd4c0bc96cb6177c63ee212cb67fd->enter($__internal_aaf106e34afa4cb6fdcc566b0b16a7aeef4fd4c0bc96cb6177c63ee212cb67fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c528ea3dff33356d6c51661e61b46a81d0ffc4eaba3296a8e122a101b666257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c528ea3dff33356d6c51661e61b46a81d0ffc4eaba3296a8e122a101b666257->enter($__internal_4c528ea3dff33356d6c51661e61b46a81d0ffc4eaba3296a8e122a101b666257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Source Energie ";
        
        $__internal_4c528ea3dff33356d6c51661e61b46a81d0ffc4eaba3296a8e122a101b666257->leave($__internal_4c528ea3dff33356d6c51661e61b46a81d0ffc4eaba3296a8e122a101b666257_prof);

        
        $__internal_aaf106e34afa4cb6fdcc566b0b16a7aeef4fd4c0bc96cb6177c63ee212cb67fd->leave($__internal_aaf106e34afa4cb6fdcc566b0b16a7aeef4fd4c0bc96cb6177c63ee212cb67fd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6cd013bb7bd1a0db22f38b805e609259e7af3ecab7c90be99ea1c92a977148b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cd013bb7bd1a0db22f38b805e609259e7af3ecab7c90be99ea1c92a977148b->enter($__internal_b6cd013bb7bd1a0db22f38b805e609259e7af3ecab7c90be99ea1c92a977148b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_278c2f1c541bd24f37fea163bb90c2f53342f0f2f13764fbf0099d9f89f459eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278c2f1c541bd24f37fea163bb90c2f53342f0f2f13764fbf0099d9f89f459eb->enter($__internal_278c2f1c541bd24f37fea163bb90c2f53342f0f2f13764fbf0099d9f89f459eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une source d'energie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sreLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_energie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
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
        
        $__internal_278c2f1c541bd24f37fea163bb90c2f53342f0f2f13764fbf0099d9f89f459eb->leave($__internal_278c2f1c541bd24f37fea163bb90c2f53342f0f2f13764fbf0099d9f89f459eb_prof);

        
        $__internal_b6cd013bb7bd1a0db22f38b805e609259e7af3ecab7c90be99ea1c92a977148b->leave($__internal_b6cd013bb7bd1a0db22f38b805e609259e7af3ecab7c90be99ea1c92a977148b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtSourceEnergie/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Source Energie {% endblock %}

{% set menu_energie        = true %}
{% set menu_energie_create = true %}

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
                        <h3 class=\"box-title\">Editer une source d'energie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.sreLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_energie\"/>
                        <a href=\"{{ path('energie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtSourceEnergie/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtSourceEnergie\\edit.html.twig");
    }
}
